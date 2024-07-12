<?php


function getGroupName($code)
{
  global $conn;
  if (isset($code)) {
    $sql = "SELECT name FROM team WHERE code='$code'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    if (strlen($row['name']) > 0) {
      return $row['name'];
    } else {
      return "Unknown";
    }
  }
}


function getCampusName($campus)
{
  switch ($campus) {
    case "mnc":
      return "Madeenathunnoor";
      break;
    case "mir":
      return "Madrasathu Imam Rabbani";
      break;

    case "dhic":
      return "Darul Hidaya";
      break;
    case "isc":
      return "Imam Shafi College";
      break;
    case "qck":
      return "Qadiriyya College";
      break;
    case "mne":
      return "Markazu Nnajath";
      break;
    case "iv":
      return "Isra";
      break;
    case "dkk":
      return "Dalailul Khairath";
      break;
    case "imk":
      return "Al Munavvara";
      break;
    case "osec":
      return " Shuhada Edu Campus";
      break;
    case "jcc":
      return "Jamalullaily Complex";
      break;
    case "mbc":
      return "Markaz Al Bilal";
      break;
    case "azt":
      return "Al Zahra";
      break;
    case "bin":
      return "Baithul Izza";
      break;
    case "mnhj":
      return "Manhaj";
      break;
    case "hsn":
      return "Hasaniyya";
      break;
    case "drn":
      return "Markaz Dhunnurain";
      break;
    case "other":
      return "Other Campus";
      break;
    default:
      return "Unknown";
  }
}


function getSection($sec)
{
  switch ($sec) {
    case 'pr':
      return "Primary";
      break;
      case 'sc':
        return "Secondary";
        break;
        case 'sj':
          return "Sub Junior";
          break;
        case 'jr':
          return "Junior";
          break;
         
    case 'sr':
      return "Senior";
      break;
    
      
        case 'gn':
          return "General";
          break;
    default:
      return "Unknown";
      break;
  }
}


function getGroupList($conn)
{
  if (isset($code)) {
    $sql = "SELECT name FROM team";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    if (strlen($row['name']) > 0) {
      return $row['name'];
    } else {
      return "Unknown";
    }
  }
}

function getProgramType($code)
{
  if ($code == 's') {
    return "Individual";
  } else {
    return "Group";
  }
}


function getPoint($rank, $grade, bool $isGroup, $programName)
{
  switch ($rank) {
    case 1:
      if ($isGroup) {
        return 20;
      } else {
        return 10;
      }
      break;
    case 2:
      if ($isGroup) {
        return 15;
      } else {
        return 6;
      }
      break;
    case 3:
      if ($isGroup) {
        return 10;
      } else {
        return 3;
      }
      break;
    default:
      return 0;
      break;
  }
}


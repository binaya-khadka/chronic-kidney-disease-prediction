<?php

function getClassLabel($class)
{
  switch ($class) {
    case 0:
      return "CKD";
    case 1:
      return "NOT CKD";
    default:
      return "Result Not Found";
  }
}


function getYesNoLabel($class)
{
  switch ($class) {
    case 0:
      return "No";
    case 1:
      return "Yes";
    default:
      return "Empty or Null";
  }
}

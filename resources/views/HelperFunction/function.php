<?php

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

function colorForCKD($result, $ckd, $not_ckd)
{
  if ($result === $ckd) {
    echo '<span style="color: red;">CKD</span>';
  } elseif ($result === $not_ckd) {
    echo '<span style="color: green;">NOT_CKD</span>';
  } else {
    echo '<span style="color: red;">Result Not Found</span>';
  }
}

<?php
if(!empty($_FILES['file1']['tmp_name']))
{
if (($_FILES["file1"]["type"] == "image/jpeg")
    && ($_FILES["file1"]["size"] < 50000))
  {
  if ($_FILES["file1"]["error"] > 0)
    {
    echo "错误: " . $_FILES["file1"]["error"] . "<br />";
    }
  else
    {
    echo "上传了菜品1: " . $_FILES["file1"]["name"] . "<br />";

    
      move_uploaded_file($_FILES["file1"]["tmp_name"],
      "upload/" . "food1");
      
    }
  }
else
  {
  echo "限制上传小于5k的jpg文件";
  }
}


if(!empty($_FILES['file2']['tmp_name']))
{
if (($_FILES["file2"]["type"] == "image/jpeg")
    && ($_FILES["file2"]["size"] < 50000))
  {
  if ($_FILES["file2"]["error"] > 0)
    {
    echo "错误: " . $_FILES["file2"]["error"] . "<br />";
    }
  else
    {
    echo "上传了菜品2: " . $_FILES["file2"]["name"] . "<br />";

    
      move_uploaded_file($_FILES["file2"]["tmp_name"],
      "upload/" . "food2");
      
    }
  }
else
  {
  echo "限制上传小于5k的jpg文件";
  }
}

if(!empty($_FILES['file3']['tmp_name']))
{
if (($_FILES["file3"]["type"] == "image/jpeg")
    && ($_FILES["file3"]["size"] < 50000))
  {
  if ($_FILES["file3"]["error"] > 0)
    {
    echo "错误: " . $_FILES["file3"]["error"] . "<br />";
    }
  else
    {
    echo "上传了菜品3: " . $_FILES["file3"]["name"] . "<br />";

    
      move_uploaded_file($_FILES["file3"]["tmp_name"],
      "upload/" . "food3");
      
    }
  }
else
  {
  echo "限制上传小于5k的jpg文件";
  }
}

?>

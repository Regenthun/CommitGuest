<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $avatarUrl = $_POST['avatar-url'];
    $wechatNickname = $_POST['wechat-nickname'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];

    // 处理表单数据，例如保存到数据库或发送到邮箱
    // 此处为示例输出数据
    // echo "微信头像URL: " . htmlspecialchars($avatarUrl) . "<br>";
    // echo "微信昵称: " . htmlspecialchars($wechatNickname) . "<br>";
    // echo "姓名: " . htmlspecialchars($name) . "<br>";
    // echo "电话: " . htmlspecialchars($phone);

    // 处理完数据后重定向到“已提交”页面
    header("Location: success.html");
    exit();
} else {
    echo "非法访问";
    exit();
}
?>


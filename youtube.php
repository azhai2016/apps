
<?php
// 设置 API 密钥和视频 ID
$API_key = 'AIzaSyBeBpFt8zHY0Kjof7UK0_jZm9hDedRPglU';
$video_id = 'qe5Q3DUfkwM';


// 设置YouTube API请求URL
$url = "https://www.googleapis.com/youtube/v3/captions?part=snippet&videoId={$video_id}&key={$API_KEY}";

// 发送HTTP请求，获取响应
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

// 解析响应，获取字幕列表
$data = json_decode($response, true);
$captions = $data['items'];

// 遍历字幕列表，获取字幕文本
foreach ($captions as $caption) {
    $caption_id = $caption['id'];
    $language = $caption['snippet']['language'];
    $name = $caption['snippet']['name'];

    // 获取字幕文本
    $url = "https://www.googleapis.com/youtube/v3/captions/{$caption_id}?key={$API_KEY}";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    curl_close($ch);

    // 解析响应，获取字幕文本
    $data = json_decode($response, true);
    $text = $data['snippet']['text'];

    // 输出字幕文本
    echo "Caption {$caption_id} ({$language}, {$name}): {$text}\n";
}


?>
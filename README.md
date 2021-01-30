# TikTokFetch
PHP tiktok quick and simple user info fetch function.
# Example Usage
```php
$user = getTiktokUser("tiktok");
print_r($user);
```
# Result
```php
Array ( 
[id] => 107955 [shortId] => 0
[uniqueId] => tiktok 
[nickname] => TikTok 
[avatarLarger] => "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1645136815763462~c5_1080x1080.jpeg?x-expires=1612112400&x-signature=3l%2BS628XCnUfLJF4yDpoBT2Kt7Q%3D"
[avatarMedium] => "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1645136815763462~c5_720x720.jpeg?x-expires=1612112400&x-signature=RrOYZo%2Fd3E0vi4f1Pr2NcWMZ0%2BM%3D"
[avatarThumb] => "https://p16-sign-va.tiktokcdn.com/musically-maliva-obj/1645136815763462~c5_100x100.jpeg?x-expires=1612112400&x-signature=WzTmj9Y32YRt7B8yYvpn7MmTCUs%3D"
[signature] => It Starts On TikTok 
[createTime] => 1425144149 
[verified] => 1 
[secUid] => MS4wLjABAAAAv7iSuuXDJGDvJkmH_vz1qkDZYo1apxgzaxdBSeIuPiM 
[ftc] => false
[relation] => 0 
[openFavorite] => 1 
[commentSetting] => 0
[duetSetting] => 0 
[stitchSetting] => 0 
[privateAccount] => false
[secret] => false
[roomId] => false 
)
```

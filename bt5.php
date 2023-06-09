<?php
$str = "hello World. I'm astrONaut.";

# 1. Chuyển đổi tất cả chữ cái trong chuỗi thành chữ hoa
echo strtolower($str); // hello world. i'm astronaut.

# 2. Chuyển đổi tất cả chữ cái trong chuỗi thành chữ thường 
echo "\n" . strtoupper($str); // HELLO WORLD. I'M ASTRONAUT.

# 3. Chuyển đổi kí tự đầu tiên của chuỗi thành chữ hoa
echo "\n" . ucfirst($str); //Hello World. I'm astrONaut

# 4. Chuyển đổi kí tự đầu tiên của tất cả các từ trong chuỗi thành chữ hoa
echo "\n" . ucwords($str); //Hello World. I'm AstrONaut.

?>
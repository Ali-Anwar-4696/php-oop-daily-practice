<?php

interface Camera {
    public function takePhoto();
}

interface MusicPlayer {
    public function playMusic();
}

class SmartPhone implements Camera, MusicPlayer {

    public function takePhoto() {
        echo "Photo captured successfully.";
    }

    public function playMusic() {
        echo "Playing music now.";
    }
}

$phone = new SmartPhone();
$phone->takePhoto();

echo "<br>";

$phone->playMusic();

?>

<?php
class Uploader {
	static $type_array = array('image/gif', 'image/jpg','image/jpeg', 'image/png');
	static $ext_array = array('jpg', 'jpeg', 'png', 'gif');
	static $file = array();
	static $width;
	static $height;
	static $patch;
	static $error = '';
	static $temp;
	static $matches;
	static $name;
	static $nameResize;

	static function upload($file){
		self::$file = $file;

		if (self::$file['size'] < 500 || self::$file['size'] > 20000000) {
			self::$error = 'Недопустимый размер файла';
		} else {
			preg_match('#\.([a-z]+)$#ui', self::$file['name'], self::$matches);

			if (isset(self::$matches[1])) {
				self::$matches[1] = mb_strtolower(self::$matches[1]);
				self::$temp = getimagesize(self::$file['tmp_name']);
				if (!in_array(self::$temp['mime'], self::$type_array)) {
					self::$error = 'Недопустимый формат файла. Нужна картинка';
				} elseif (!in_array(self::$matches[1], self::$ext_array)) {
					self::$error = 'Не удалось распознать тип файла(расширение)';
				} else {

					self::$name = '/uploaded/'.date('Ymd-His').'img'.rand(10000,99999).'.'.self::$matches[1];

					if (!move_uploaded_file(self::$file['tmp_name'], '.'.self::$name)) {
						self::$error = 'Файл не загружен';
						return false;
					} else {
						return true;
					}
				}
			}
		}
	}

	static function resize($width, $height, $patch){

		self::$width = $width;
		self::$height = $height;
		self::$patch = $patch;

		$dir = substr(self::$patch, 0, -1);
		if(!file_exists('.'.$dir) || !is_dir('.'.$dir)) {
			mkdir('.'.$dir);
		}


		$width_orig = self::$temp[0];
		$height_orig = self::$temp[1];

		$proportion = $width_orig/$height_orig;

		if (self::$width/self::$height > $proportion) {
			self::$width = self::$height*$proportion;
		} else {
			self::$height = self::$width/$proportion;
		}

		$image_p = imagecreatetruecolor(self::$width, self::$height);

		if (self::$matches[1] == 'jpg' || self::$matches[1] == 'jpeg') {
			$image = imagecreatefromjpeg('.'.self::$name);
		} elseif (self::$matches[1] == 'png') {
			$image = imagecreatefrompng('.'.self::$name);
		} elseif (self::$matches[1] == 'gif') {
			$image = imagecreatefromgif('.'.self::$name);
		}
		imagecopyresampled($image_p, $image, 0, 0, 0, 0, self::$width, self::$height, $width_orig, $height_orig);

		self::$nameResize = self::$patch.date('Ymd-His').'img'.rand(10000,99999).'.'.self::$matches[1];
		if (self::$matches[1] == 'jpg' || self::$matches[1] == 'jpeg') {
			imagejpeg($image_p, '.'.self::$nameResize);
		} elseif (self::$matches[1] == 'png') {
			imagepng($image_p, '.'.self::$nameResize);
		} elseif (self::$matches[1] == 'gif') {
			imagegif($image_p, '.'.self::$nameResize);
		}
	}
}

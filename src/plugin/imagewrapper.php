<?php
class ImageWrapper {

	private $image;

	function __construct($filepath) {
		// TODO check if file exists
		$this->image = new JImage($filepath);
	}

	function getImageWidth() {
		return $this->image->getWidth();
	}

	function getImageHeight() {
		return $this->image->getHeight();
	}

	function resizeImage($width, $height, $filter, $blur, $bestfit) {
		$this->image = $this->image->resize($width, $height, true, JImage::SCALE_FIT);
	}

	function writeImage($filepath) {
		$this->image->toFile($filepath);
	}

	function destroy() {
		$this->image->destroy();
	}
}

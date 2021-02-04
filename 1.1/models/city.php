<?php
class City {
    // Properties
    private $id;
    private $name;
    private $title;
    private $width;
    private $height;
    //__construct ( mixed ...$values = "" ) : void
    public function __construct($id)
    {
        $sql = GetData("select * from images where img_id = $id");
        $this->id = $id;
        $this->title = $sql[0]['img_title'];
        $this->name = $sql[0]['img_filename'];
        $this->width = $sql[0]['img_width'];
        $this->height = $sql[0]['img_height'];
    }

    // Methods
    public function set_id($id) {
        $this->id = $id;
    }
    public function get_id() {
        return $this->id;
    }
    public function set_name($name) {
        $this->name = $name;
    }
    public function get_name() {
        return $this->name;
    }
    public function set_title($title) {
        $this->title = $title;
    }
    public function get_title() {
        return strtoupper($this->title);
    }
    public function set_width($width) {
        $this->width = $width;
    }
    public function get_width() {
        return $this->width;
    }
    public function set_height($height) {
        $this->height = $height;
    }
    public function get_height() {
        return $this->height;
    }
}
?>
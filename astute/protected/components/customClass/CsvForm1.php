<?php

class CsvForm1 {

    public $file;

    public function rules() {
        return [
            [['file'], 'required'],
            [['file'], 'file', 'extensions' => 'csv', 'maxSize' => 1024 * 1024 * 5],
        ];
    }

    public function attributeLabels() {
        return [
            'file' => 'Select File',
        ];
    }

}

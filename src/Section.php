<?php
namespace icurdinj\Config;

/**
 * Container for config sections
 *
 * @author Ivan Čurdinjaković
 */
class Section {
    private $section = [];

    public function __construct(array $section){
        $this->section = $section;
    }

    public function getValue($key){
        if (isset($this->section[$key])) return $this->section[$key];
        else throw new \UnexpectedValueException("Value with key $key does not exist.");
    }
}

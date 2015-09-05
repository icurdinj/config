<?php
namespace icurdinj\Config;

/**
 * Supports config through .ini file (with sections)
 *
 * @author Ivan Čurdinjaković
 */
class Ini implements ConfigInterface {
    private $config = [];

    /**
     * @param string $iniFile Full path to ini file.
     * @throws Exception If it can't open or parse file.
     */
    public function __construct($iniFile){
        $this->config = parse_ini_file($iniFile, true);
        if (!$this->config){
            throw new \Exception("Can't open or parse ini file.");
        }
    }

    /**
     * Returns a config section.
     *
     * @param string $section
     * @return \icurdinj\Config\Section
     * @throws UnexpectedValueException When the given section doesn't exist.
     */
    public function getSection($section) {
        if (isset($this->config[$section])) return new Section($this->config[$section]);
        else throw new \UnexpectedValueException('Section does not exist.');
    }
}

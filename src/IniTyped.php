<?php
namespace icurdinj\Config;

/**
 * Supports config through .ini file (with sections)
 *
 * Needs at least PHP 5.6.1, because it uses INI_SCANNER_TYPED. Because types
 * are awesome.
 *
 * @author Ivan Čurdinjaković
 */
final class IniTyped extends Ini {
    private $config = [];

    /**
     * @param string $iniFile Full path to ini file.
     * @throws Exception If it can't open or parse file.
     */
    public function __construct($iniFile){
        $this->config = parse_ini_file($iniFile, true, INI_SCANNER_TYPED);
        if (!$this->config){
            throw new \Exception("Can't open or parse ini file.");
        }
    }
}

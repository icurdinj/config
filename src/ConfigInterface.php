<?php
namespace icurdinj\Config;

/**
 * Interface for Config classes.
 *
 * Provides configuration for the whole project in a config file - ini, json,
 * neon... That's up to implementing class.
 * Can be injected to a class that needs configuration, which will then
 * probably just use getSection to get its own part of config file.
 *
 * @author Ivan Čurdinjaković
 */
interface ConfigInterface {
    function getSection($section);
}

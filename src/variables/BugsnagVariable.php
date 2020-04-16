<?php
/**
 * Bugsnag plugin for Craft CMS 3.x
 *
 * Log Craft errors/exceptions to Bugsnag.
 *
 * @link      https://superbig.co
 * @copyright Copyright (c) 2017 Superbig
 */

namespace superbig\bugsnag\variables;

use Bugsnag\Breadcrumbs\Breadcrumb;
use Bugsnag\Client;
use Bugsnag\Report;
use superbig\bugsnag\Bugsnag;

use Craft;
use craft\base\Component;
use craft\elements\User;
use superbig\bugsnag\models\Settings;

/**
 * @author    Superbig
 * @package   Bugsnag
 * @since     2.0.0
 */
class BugsnagVariable
{
    public function metadata(array $data = [])
    {
        return Bugsnag::$plugin->getService()->metadata((array)$data);
    }
}

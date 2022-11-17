<?php

namespace App;

/**
 * Status code (aka slug) used in shurjoPay payment engine system.
 * Must be registered in composer autoload section to be used throughout a laravel or lumen project.
 * "autoload": {
 *   "psr-4": {
 *     "App\\": "app/",
 *     ...
 *   },
 *   "files": [
 *     "app/shurjopay_constants.php"
 *   ]
 * },
 *
 * @since 2022-11-17
 */

// TODO message of few status code missing. Swapnil must finish.
define("SP_TX_SUCCESS", 1000);
define("SP_REFUND_REQUESTED", 2000);
define("SP_REFUND_ACCEPTED", 2001);
define("SP_REFUND_DONE", 2002);
define("SP_REFUND_DISBURSED", 2002);
define("SP_REFUND_CANCELLED", 2003);
/** NOTE: will be deprecated in favor of SP_REFUND_CANCELLED = 2003 */
define("SP_REFUND_SCRAP", 2006);

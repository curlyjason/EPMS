<?php
namespace Stacks\Exception;

use Cake\Core\Exception\Exception;

class UnknownTableException extends Exception
{

    public function __construct($message, $code = 500, $previous = null)
    {

		/**
		 * When adding tables to a layer table system,
         * make sure it's actually a table.
		 */

        parent::__construct($message, $code, $previous);
    }

}

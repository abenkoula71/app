<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * Exceptions config.
 *
 * @see App::prepareExceptionHandler()
 * @see https://docs.aplus-framework.com/guides/libraries/mvc/index.html#exceptions-service
 */

use Framework\Debug\ExceptionHandler;

return [
    'default' => [
        'initialize' => true,
        // @phpstan-ignore-next-line
        'environment' => ENVIRONMENT === 'development'
            ? ExceptionHandler::DEVELOPMENT
            : ExceptionHandler::PRODUCTION,
        'views_dir' => null,
        'logger_instance' => 'default',
        'language_instance' => 'default',
    ],
];

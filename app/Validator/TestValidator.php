<?php declare(strict_types=1);
/**
 * This file is part of Swoft.
 *
 * @link     https://swoft.org
 * @document https://swoft.org/docs
 * @contact  group@swoft.org
 * @license  https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace App\Validator;

use Swoft\Validator\Annotation\Mapping\IsInt;
use Swoft\Validator\Annotation\Mapping\IsString;
use Swoft\Validator\Annotation\Mapping\Validator;

/**
 * Class TestValidator
 *
 * @since 2.0
 *
 * @Validator(name="TestValidator")
 */
class TestValidator
{
    /**
     * @IsString()
     *
     * @var string
     */
    protected $name = 'defualtName';

    /**
     * @IsInt(message="type must Integer")
     *
     * @var int
     */
    protected $type;

    /**
     * @IsString()
     *
     * @var string
     */
    protected $password;
}

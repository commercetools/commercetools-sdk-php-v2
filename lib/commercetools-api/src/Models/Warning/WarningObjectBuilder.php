<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Warning;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<WarningObject>
 */
final class WarningObjectBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**
     * <p>Contains information about the returned response.</p>
     *

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param ?string $message
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }


    public function build(): WarningObject
    {
        return new WarningObjectModel(
            $this->message
        );
    }

    public static function of(): WarningObjectBuilder
    {
        return new self();
    }
}

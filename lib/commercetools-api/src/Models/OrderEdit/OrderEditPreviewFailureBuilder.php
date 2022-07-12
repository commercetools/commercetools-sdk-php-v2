<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\OrderEdit;

use Commercetools\Api\Models\Error\ErrorObjectCollection;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<OrderEditPreviewFailure>
 */
final class OrderEditPreviewFailureBuilder implements Builder
{
    /**

     * @var ?ErrorObjectCollection
     */
    private $errors;

    /**

     * @return null|ErrorObjectCollection
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param ?ErrorObjectCollection $errors
     * @return $this
     */
    public function withErrors(?ErrorObjectCollection $errors)
    {
        $this->errors = $errors;

        return $this;
    }


    public function build(): OrderEditPreviewFailure
    {
        return new OrderEditPreviewFailureModel(
            $this->errors
        );
    }

    public static function of(): OrderEditPreviewFailureBuilder
    {
        return new self();
    }
}

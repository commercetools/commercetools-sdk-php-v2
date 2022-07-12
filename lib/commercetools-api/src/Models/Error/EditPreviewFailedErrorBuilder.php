<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Error;

use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailure;
use Commercetools\Api\Models\OrderEdit\OrderEditPreviewFailureBuilder;
use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<EditPreviewFailedError>
 */
final class EditPreviewFailedErrorBuilder implements Builder
{
    /**

     * @var ?string
     */
    private $message;

    /**

     * @var null|OrderEditPreviewFailure|OrderEditPreviewFailureBuilder
     */
    private $result;

    /**

     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**

     * @return null|OrderEditPreviewFailure
     */
    public function getResult()
    {
        return $this->result instanceof OrderEditPreviewFailureBuilder ? $this->result->build() : $this->result;
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

    /**
     * @param ?OrderEditPreviewFailure $result
     * @return $this
     */
    public function withResult(?OrderEditPreviewFailure $result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @deprecated use withResult() instead
     * @return $this
     */
    public function withResultBuilder(?OrderEditPreviewFailureBuilder $result)
    {
        $this->result = $result;

        return $this;
    }

    public function build(): EditPreviewFailedError
    {
        return new EditPreviewFailedErrorModel(
            $this->message,
            $this->result instanceof OrderEditPreviewFailureBuilder ? $this->result->build() : $this->result
        );
    }

    public static function of(): EditPreviewFailedErrorBuilder
    {
        return new self();
    }
}

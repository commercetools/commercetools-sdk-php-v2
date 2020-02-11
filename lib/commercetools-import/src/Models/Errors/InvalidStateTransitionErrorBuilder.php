<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;
use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @implements Builder<InvalidStateTransitionError>
 */
final class InvalidStateTransitionErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $message;

    /**
     * @var ?string
     */
    private $currentState;

    /**
     * @var ?string
     */
    private $newState;

    /**
     * <p>The error's description.</p>
     *
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>This enumeration describes the processing state of an import operation.</p>
     *
     * @return null|string
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * <p>This enumeration describes the processing state of an import operation.</p>
     *
     * @return null|string
     */
    public function getNewState()
    {
        return $this->newState;
    }

    /**
     * @return $this
     */
    public function withMessage(?string $message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * @return $this
     */
    public function withCurrentState(?string $currentState)
    {
        $this->currentState = $currentState;

        return $this;
    }

    /**
     * @return $this
     */
    public function withNewState(?string $newState)
    {
        $this->newState = $newState;

        return $this;
    }


    public function build(): InvalidStateTransitionError
    {
        return new InvalidStateTransitionErrorModel(
            $this->message,
            $this->currentState,
            $this->newState
        );
    }

    public static function of(): InvalidStateTransitionErrorBuilder
    {
        return new self();
    }
}

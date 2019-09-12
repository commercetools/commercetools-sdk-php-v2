<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\Builder;

/**
 * @implements Builder<InvalidStateTransitionError>
 */
final class InvalidStateTransitionErrorBuilder implements Builder
{
    /**
     * @var ?string
     */
    private $code;

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

    public function __construct()
    {
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * <p>This enumeration describes the processing state of an import item.</p>
     * <ul>
     * <li>ACCEPTED The import resource was succesfully validated.</li>
     * <li>VALIDATION_FAILED The validation of the import resource failed.</li>
     * <li>UNRESOLVED The import resource contains unresolved references and needs to be resolved further.</li>
     * <li>RESOLVED The import resource is resolved and doesn't contain any unresolved references.</li>
     * <li>WAIT_FOR_MASTER_VARIANT Wait for a master variant to arrive: The product import has required attributes and thus requires a master variant that provides those.</li>
     * <li>IMPORTED The import resource was imported successfully.</li>
     * <li>DELETED The import resource was deleted successfully.</li>
     * <li>REJECTED The import resource couldn't be imported or deleted after several retries.</li>
     * <li>SKIPPED the import resource was skipped because the skip predicate was evaluated to true.</li>
     * </ul>.
     *
     * @return null|string
     */
    public function getCurrentState()
    {
        return $this->currentState;
    }

    /**
     * <p>This enumeration describes the processing state of an import item.</p>
     * <ul>
     * <li>ACCEPTED The import resource was succesfully validated.</li>
     * <li>VALIDATION_FAILED The validation of the import resource failed.</li>
     * <li>UNRESOLVED The import resource contains unresolved references and needs to be resolved further.</li>
     * <li>RESOLVED The import resource is resolved and doesn't contain any unresolved references.</li>
     * <li>WAIT_FOR_MASTER_VARIANT Wait for a master variant to arrive: The product import has required attributes and thus requires a master variant that provides those.</li>
     * <li>IMPORTED The import resource was imported successfully.</li>
     * <li>DELETED The import resource was deleted successfully.</li>
     * <li>REJECTED The import resource couldn't be imported or deleted after several retries.</li>
     * <li>SKIPPED the import resource was skipped because the skip predicate was evaluated to true.</li>
     * </ul>.
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
    public function withCode(?string $code)
    {
        $this->code = $code;

        return $this;
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
            $this->code,
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

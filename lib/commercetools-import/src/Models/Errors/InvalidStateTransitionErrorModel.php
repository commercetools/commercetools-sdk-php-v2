<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

use Commercetools\Base\JsonObjectModel;

final class InvalidStateTransitionErrorModel extends JsonObjectModel implements InvalidStateTransitionError
{
    const DISCRIMINATOR_VALUE = 'InvalidTransition';

    /**
     * @var ?string
     */
    protected $code;

    /**
     * @var ?string
     */
    protected $message;

    /**
     * @var ?string
     */
    protected $currentState;

    /**
     * @var ?string
     */
    protected $newState;

    public function __construct(
        string $code = null,
        string $message = null,
        string $currentState = null,
        string $newState = null
    ) {
        $this->code = $code;
        $this->message = $message;
        $this->currentState = $currentState;
        $this->newState = $newState;
    }

    /**
     * @return null|string
     */
    public function getCode()
    {
        if (is_null($this->code)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_CODE);
            if (is_null($data)) {
                return null;
            }
            $this->code = (string) $data;
        }

        return $this->code;
    }

    /**
     * @return null|string
     */
    public function getMessage()
    {
        if (is_null($this->message)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ErrorObject::FIELD_MESSAGE);
            if (is_null($data)) {
                return null;
            }
            $this->message = (string) $data;
        }

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
        if (is_null($this->currentState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InvalidStateTransitionError::FIELD_CURRENT_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->currentState = (string) $data;
        }

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
        if (is_null($this->newState)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(InvalidStateTransitionError::FIELD_NEW_STATE);
            if (is_null($data)) {
                return null;
            }
            $this->newState = (string) $data;
        }

        return $this->newState;
    }

    public function setCode(?string $code): void
    {
        $this->code = $code;
    }

    public function setMessage(?string $message): void
    {
        $this->message = $message;
    }

    public function setCurrentState(?string $currentState): void
    {
        $this->currentState = $currentState;
    }

    public function setNewState(?string $newState): void
    {
        $this->newState = $newState;
    }
}

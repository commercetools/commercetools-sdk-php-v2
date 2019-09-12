<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Import\Models\Errors;

interface InvalidStateTransitionError extends ErrorObject
{
    const FIELD_CURRENT_STATE = 'currentState';
    const FIELD_NEW_STATE = 'newState';

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
    public function getCurrentState();

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
    public function getNewState();

    public function setCurrentState(?string $currentState): void;

    public function setNewState(?string $newState): void;
}

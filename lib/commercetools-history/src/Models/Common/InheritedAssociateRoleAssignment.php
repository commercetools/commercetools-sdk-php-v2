<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\JsonObject;
use Commercetools\Base\DateTimeImmutableCollection;

interface InheritedAssociateRoleAssignment extends JsonObject
{

    public const FIELD_ASSOCIATE_ROLE = 'associateRole';
    public const FIELD_SOURCE = 'source';

    /**

     * @return null|KeyReference
     */
    public function getAssociateRole();

    /**

     * @return null|KeyReference
     */
    public function getSource();

    /**
     * @param ?KeyReference $associateRole
     */
    public function setAssociateRole(?KeyReference $associateRole): void;

    /**
     * @param ?KeyReference $source
     */
    public function setSource(?KeyReference $source): void;
}

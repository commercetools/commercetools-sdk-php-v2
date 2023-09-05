<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\History\Models\Common;

use Commercetools\Base\DateTimeImmutableCollection;
use Commercetools\Base\JsonObject;
use Commercetools\Base\JsonObjectModel;
use Commercetools\Base\MapperFactory;
use stdClass;

/**
 * @internal
 */
final class InheritedAssociateRoleAssignmentModel extends JsonObjectModel implements InheritedAssociateRoleAssignment
{


    /**
     *
     * @var ?KeyReference
     */
    protected $associateRole;

    /**
     *
     * @var ?KeyReference
     */
    protected $source;


    /**
     * @psalm-suppress MissingParamType
     */
    public function __construct(
        ?KeyReference $associateRole = null,
        ?KeyReference $source = null
    ) {
        $this->associateRole = $associateRole;
        $this->source = $source;

    }

    /**
     *
     * @return null|KeyReference
     */
    public function getAssociateRole()
    {
        if (is_null($this->associateRole)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_ASSOCIATE_ROLE);
            if (is_null($data)) {
                return null;
            }

            $this->associateRole = KeyReferenceModel::of($data);
        }

        return $this->associateRole;
    }

    /**
     *
     * @return null|KeyReference
     */
    public function getSource()
    {
        if (is_null($this->source)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(self::FIELD_SOURCE);
            if (is_null($data)) {
                return null;
            }

            $this->source = KeyReferenceModel::of($data);
        }

        return $this->source;
    }


    /**
     * @param ?KeyReference $associateRole
     */
    public function setAssociateRole(?KeyReference $associateRole): void
    {
        $this->associateRole = $associateRole;
    }

    /**
     * @param ?KeyReference $source
     */
    public function setSource(?KeyReference $source): void
    {
        $this->source = $source;
    }



}

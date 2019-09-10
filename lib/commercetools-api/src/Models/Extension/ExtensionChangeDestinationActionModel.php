<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Extension;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ExtensionChangeDestinationActionModel extends JsonObjectModel implements ExtensionChangeDestinationAction
{
    const DISCRIMINATOR_VALUE = 'changeDestination';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ExtensionDestination
     */
    protected $destination;

    public function __construct(
        string $action = null,
        ExtensionDestination $destination = null
    ) {
        $this->action = $action;
        $this->destination = $destination;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ExtensionUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * @return null|ExtensionDestination
     */
    public function getDestination()
    {
        if (is_null($this->destination)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ExtensionChangeDestinationAction::FIELD_DESTINATION);
            if (is_null($data)) {
                return null;
            }
            $className = ExtensionDestinationModel::resolveDiscriminatorClass($data);
            $this->destination = $className::of($data);
        }

        return $this->destination;
    }

    public function setAction(?string $action): void
    {
        $this->action = $action;
    }

    public function setDestination(?ExtensionDestination $destination): void
    {
        $this->destination = $destination;
    }
}

<?php

declare(strict_types=1);
/**
 * This file has been auto generated
 * Do not change it.
 */

namespace Commercetools\Api\Models\Project;

use Commercetools\Base\JsonObjectModel;
use stdClass;

final class ProjectSetExternalOAuthActionModel extends JsonObjectModel implements ProjectSetExternalOAuthAction
{
    const DISCRIMINATOR_VALUE = 'setExternalOAuth';

    /**
     * @var ?string
     */
    protected $action;

    /**
     * @var ?ExternalOAuth
     */
    protected $externalOAuth;

    public function __construct(
        ExternalOAuth $externalOAuth = null
    ) {
        $this->externalOAuth = $externalOAuth;
        $this->action = static::DISCRIMINATOR_VALUE;
    }

    /**
     * @return null|string
     */
    public function getAction()
    {
        if (is_null($this->action)) {
            /** @psalm-var ?string $data */
            $data = $this->raw(ProjectUpdateAction::FIELD_ACTION);
            if (is_null($data)) {
                return null;
            }
            $this->action = (string) $data;
        }

        return $this->action;
    }

    /**
     * <p>If you do not provide the <code>externalOAuth</code> field or provide a value
     * of <code>null</code>, the update action unsets the External OAuth provider.</p>.
     *
     * @return null|ExternalOAuth
     */
    public function getExternalOAuth()
    {
        if (is_null($this->externalOAuth)) {
            /** @psalm-var stdClass|array<string, mixed>|null $data */
            $data = $this->raw(ProjectSetExternalOAuthAction::FIELD_EXTERNAL_O_AUTH);
            if (is_null($data)) {
                return null;
            }

            $this->externalOAuth = ExternalOAuthModel::of($data);
        }

        return $this->externalOAuth;
    }

    public function setExternalOAuth(?ExternalOAuth $externalOAuth): void
    {
        $this->externalOAuth = $externalOAuth;
    }
}

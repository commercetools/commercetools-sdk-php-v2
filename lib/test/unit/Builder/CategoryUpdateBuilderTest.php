<?php
declare(strict_types = 1);
/**
 * This file has been auto generated
 * Do not change it
 */

namespace Commercetools\Builder;

use Commercetools\Builder\CategoryUpdateBuilder;
use Commercetools\Exception\BuilderInvalidArgumentException;
use Commercetools\Types\Category\CategoryAddAssetAction;
use Commercetools\Types\Category\CategoryChangeAssetNameAction;
use Commercetools\Types\Category\CategoryChangeAssetOrderAction;
use Commercetools\Types\Category\CategoryChangeNameAction;
use Commercetools\Types\Category\CategoryChangeOrderHintAction;
use Commercetools\Types\Category\CategoryChangeParentAction;
use Commercetools\Types\Category\CategoryChangeSlugAction;
use Commercetools\Types\Category\CategoryRemoveAssetAction;
use Commercetools\Types\Category\CategorySetAssetCustomFieldAction;
use Commercetools\Types\Category\CategorySetAssetCustomTypeAction;
use Commercetools\Types\Category\CategorySetAssetDescriptionAction;
use Commercetools\Types\Category\CategorySetAssetKeyAction;
use Commercetools\Types\Category\CategorySetAssetSourcesAction;
use Commercetools\Types\Category\CategorySetAssetTagsAction;
use Commercetools\Types\Category\CategorySetCustomFieldAction;
use Commercetools\Types\Category\CategorySetCustomTypeAction;
use Commercetools\Types\Category\CategorySetDescriptionAction;
use Commercetools\Types\Category\CategorySetExternalIdAction;
use Commercetools\Types\Category\CategorySetKeyAction;
use Commercetools\Types\Category\CategorySetMetaDescriptionAction;
use Commercetools\Types\Category\CategorySetMetaKeywordsAction;
use Commercetools\Types\Category\CategorySetMetaTitleAction;
use Commercetools\Types\Category\Category;
use Commercetools\Types\Category\CategoryUpdate;
use Commercetools\Request\ByProjectKeyCategoriesByIDPost;

use Commercetools\Types\Category\CategoryAddAssetActionModel;
use Commercetools\Types\Category\CategoryChangeAssetNameActionModel;
use Commercetools\Types\Category\CategoryChangeAssetOrderActionModel;
use Commercetools\Types\Category\CategoryChangeNameActionModel;
use Commercetools\Types\Category\CategoryChangeOrderHintActionModel;
use Commercetools\Types\Category\CategoryChangeParentActionModel;
use Commercetools\Types\Category\CategoryChangeSlugActionModel;
use Commercetools\Types\Category\CategoryRemoveAssetActionModel;
use Commercetools\Types\Category\CategorySetAssetCustomFieldActionModel;
use Commercetools\Types\Category\CategorySetAssetCustomTypeActionModel;
use Commercetools\Types\Category\CategorySetAssetDescriptionActionModel;
use Commercetools\Types\Category\CategorySetAssetKeyActionModel;
use Commercetools\Types\Category\CategorySetAssetSourcesActionModel;
use Commercetools\Types\Category\CategorySetAssetTagsActionModel;
use Commercetools\Types\Category\CategorySetCustomFieldActionModel;
use Commercetools\Types\Category\CategorySetCustomTypeActionModel;
use Commercetools\Types\Category\CategorySetDescriptionActionModel;
use Commercetools\Types\Category\CategorySetExternalIdActionModel;
use Commercetools\Types\Category\CategorySetKeyActionModel;
use Commercetools\Types\Category\CategorySetMetaDescriptionActionModel;
use Commercetools\Types\Category\CategorySetMetaKeywordsActionModel;
use Commercetools\Types\Category\CategorySetMetaTitleActionModel;

use PHPUnit\Framework\TestCase;
use Commercetools\Types\Category\CategoryModel;


class CategoryBuilderTest extends TestCase {
    public function testAddAssetCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->addAsset(function($action) { static::assertInstanceOf(CategoryAddAssetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryAddAssetAction::class, $update->getActions()->current());
    }

    public function testAddAssetInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->addAsset(function($action) { static::assertInstanceOf(CategoryAddAssetAction::class, $action); return []; });
    }

    public function testAddAssetInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->addAsset(new CategoryAddAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryAddAssetAction::class, $update->getActions()->current());
    }

    public function testAddAssetInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->addAsset([]);
    }

    public function testChangeAssetNameCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetName(function($action) { static::assertInstanceOf(CategoryChangeAssetNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetName(function($action) { static::assertInstanceOf(CategoryChangeAssetNameAction::class, $action); return []; });
    }

    public function testChangeAssetNameInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetName(new CategoryChangeAssetNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetNameAction::class, $update->getActions()->current());
    }

    public function testChangeAssetNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetName([]);
    }

    public function testChangeAssetOrderCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetOrder(function($action) { static::assertInstanceOf(CategoryChangeAssetOrderAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetOrder(function($action) { static::assertInstanceOf(CategoryChangeAssetOrderAction::class, $action); return []; });
    }

    public function testChangeAssetOrderInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetOrder(new CategoryChangeAssetOrderActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeAssetOrderAction::class, $update->getActions()->current());
    }

    public function testChangeAssetOrderInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeAssetOrder([]);
    }

    public function testChangeNameCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(CategoryChangeNameAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeName(function($action) { static::assertInstanceOf(CategoryChangeNameAction::class, $action); return []; });
    }

    public function testChangeNameInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeName(new CategoryChangeNameActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeNameAction::class, $update->getActions()->current());
    }

    public function testChangeNameInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeName([]);
    }

    public function testChangeOrderHintCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeOrderHint(function($action) { static::assertInstanceOf(CategoryChangeOrderHintAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeOrderHintAction::class, $update->getActions()->current());
    }

    public function testChangeOrderHintInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeOrderHint(function($action) { static::assertInstanceOf(CategoryChangeOrderHintAction::class, $action); return []; });
    }

    public function testChangeOrderHintInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeOrderHint(new CategoryChangeOrderHintActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeOrderHintAction::class, $update->getActions()->current());
    }

    public function testChangeOrderHintInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeOrderHint([]);
    }

    public function testChangeParentCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeParent(function($action) { static::assertInstanceOf(CategoryChangeParentAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeParentAction::class, $update->getActions()->current());
    }

    public function testChangeParentInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeParent(function($action) { static::assertInstanceOf(CategoryChangeParentAction::class, $action); return []; });
    }

    public function testChangeParentInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeParent(new CategoryChangeParentActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeParentAction::class, $update->getActions()->current());
    }

    public function testChangeParentInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeParent([]);
    }

    public function testChangeSlugCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeSlug(function($action) { static::assertInstanceOf(CategoryChangeSlugAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeSlugAction::class, $update->getActions()->current());
    }

    public function testChangeSlugInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeSlug(function($action) { static::assertInstanceOf(CategoryChangeSlugAction::class, $action); return []; });
    }

    public function testChangeSlugInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->changeSlug(new CategoryChangeSlugActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryChangeSlugAction::class, $update->getActions()->current());
    }

    public function testChangeSlugInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->changeSlug([]);
    }

    public function testRemoveAssetCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->removeAsset(function($action) { static::assertInstanceOf(CategoryRemoveAssetAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->removeAsset(function($action) { static::assertInstanceOf(CategoryRemoveAssetAction::class, $action); return []; });
    }

    public function testRemoveAssetInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->removeAsset(new CategoryRemoveAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryRemoveAssetAction::class, $update->getActions()->current());
    }

    public function testRemoveAssetInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->removeAsset([]);
    }

    public function testSetAssetCustomFieldCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomField(function($action) { static::assertInstanceOf(CategorySetAssetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomField(function($action) { static::assertInstanceOf(CategorySetAssetCustomFieldAction::class, $action); return []; });
    }

    public function testSetAssetCustomFieldInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomField(new CategorySetAssetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomFieldInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomField([]);
    }

    public function testSetAssetCustomTypeCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomType(function($action) { static::assertInstanceOf(CategorySetAssetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomType(function($action) { static::assertInstanceOf(CategorySetAssetCustomTypeAction::class, $action); return []; });
    }

    public function testSetAssetCustomTypeInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomType(new CategorySetAssetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetAssetCustomTypeInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetCustomType([]);
    }

    public function testSetAssetDescriptionCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetDescription(function($action) { static::assertInstanceOf(CategorySetAssetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetDescription(function($action) { static::assertInstanceOf(CategorySetAssetDescriptionAction::class, $action); return []; });
    }

    public function testSetAssetDescriptionInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetDescription(new CategorySetAssetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetAssetDescriptionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetDescription([]);
    }

    public function testSetAssetKeyCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetKey(function($action) { static::assertInstanceOf(CategorySetAssetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetKey(function($action) { static::assertInstanceOf(CategorySetAssetKeyAction::class, $action); return []; });
    }

    public function testSetAssetKeyInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetKey(new CategorySetAssetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetKeyAction::class, $update->getActions()->current());
    }

    public function testSetAssetKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetKey([]);
    }

    public function testSetAssetSourcesCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetSources(function($action) { static::assertInstanceOf(CategorySetAssetSourcesAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetSources(function($action) { static::assertInstanceOf(CategorySetAssetSourcesAction::class, $action); return []; });
    }

    public function testSetAssetSourcesInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetSources(new CategorySetAssetSourcesActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetSourcesAction::class, $update->getActions()->current());
    }

    public function testSetAssetSourcesInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetSources([]);
    }

    public function testSetAssetTagsCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetTags(function($action) { static::assertInstanceOf(CategorySetAssetTagsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetTags(function($action) { static::assertInstanceOf(CategorySetAssetTagsAction::class, $action); return []; });
    }

    public function testSetAssetTagsInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetTags(new CategorySetAssetTagsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetAssetTagsAction::class, $update->getActions()->current());
    }

    public function testSetAssetTagsInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setAssetTags([]);
    }

    public function testSetCustomFieldCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(CategorySetCustomFieldAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomField(function($action) { static::assertInstanceOf(CategorySetCustomFieldAction::class, $action); return []; });
    }

    public function testSetCustomFieldInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomField(new CategorySetCustomFieldActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomFieldAction::class, $update->getActions()->current());
    }

    public function testSetCustomFieldInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomField([]);
    }

    public function testSetCustomTypeCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(CategorySetCustomTypeAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomType(function($action) { static::assertInstanceOf(CategorySetCustomTypeAction::class, $action); return []; });
    }

    public function testSetCustomTypeInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomType(new CategorySetCustomTypeActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetCustomTypeAction::class, $update->getActions()->current());
    }

    public function testSetCustomTypeInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setCustomType([]);
    }

    public function testSetDescriptionCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(CategorySetDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setDescription(function($action) { static::assertInstanceOf(CategorySetDescriptionAction::class, $action); return []; });
    }

    public function testSetDescriptionInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setDescription(new CategorySetDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetDescriptionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setDescription([]);
    }

    public function testSetExternalIdCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setExternalId(function($action) { static::assertInstanceOf(CategorySetExternalIdAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setExternalId(function($action) { static::assertInstanceOf(CategorySetExternalIdAction::class, $action); return []; });
    }

    public function testSetExternalIdInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setExternalId(new CategorySetExternalIdActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetExternalIdAction::class, $update->getActions()->current());
    }

    public function testSetExternalIdInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setExternalId([]);
    }

    public function testSetKeyCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(CategorySetKeyAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setKey(function($action) { static::assertInstanceOf(CategorySetKeyAction::class, $action); return []; });
    }

    public function testSetKeyInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setKey(new CategorySetKeyActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetKeyAction::class, $update->getActions()->current());
    }

    public function testSetKeyInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setKey([]);
    }

    public function testSetMetaDescriptionCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaDescription(function($action) { static::assertInstanceOf(CategorySetMetaDescriptionAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaDescription(function($action) { static::assertInstanceOf(CategorySetMetaDescriptionAction::class, $action); return []; });
    }

    public function testSetMetaDescriptionInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaDescription(new CategorySetMetaDescriptionActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaDescriptionAction::class, $update->getActions()->current());
    }

    public function testSetMetaDescriptionInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaDescription([]);
    }

    public function testSetMetaKeywordsCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaKeywords(function($action) { static::assertInstanceOf(CategorySetMetaKeywordsAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaKeywords(function($action) { static::assertInstanceOf(CategorySetMetaKeywordsAction::class, $action); return []; });
    }

    public function testSetMetaKeywordsInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaKeywords(new CategorySetMetaKeywordsActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaKeywordsAction::class, $update->getActions()->current());
    }

    public function testSetMetaKeywordsInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaKeywords([]);
    }

    public function testSetMetaTitleCallback() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaTitle(function($action) { static::assertInstanceOf(CategorySetMetaTitleAction::class, $action); return $action; });
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaTitleAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleInvalidCallback() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaTitle(function($action) { static::assertInstanceOf(CategorySetMetaTitleAction::class, $action); return []; });
    }

    public function testSetMetaTitleInstance() {
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaTitle(new CategorySetMetaTitleActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategorySetMetaTitleAction::class, $update->getActions()->current());
    }

    public function testSetMetaTitleInvalidInstance() {
        $this->expectException(BuilderInvalidArgumentException::class);
        $builder = new CategoryUpdateBuilder();
        $builder->setMetaTitle([]);
    }


    public function testReset() {
        $builder = new CategoryUpdateBuilder();
        $builder->addAsset(new CategoryAddAssetActionModel());
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertInstanceOf(CategoryAddAssetAction::class, $update->getActions()->current());

        $builder->reset();
        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertCount(0, $update->getActions());
    }

    public function testWithResource() {
        $builder = new CategoryUpdateBuilder();
        static::assertNull($builder->getResource());

        $builder->with(new CategoryModel());
        static::assertInstanceOf(Category::class, $builder->getResource());
    }

    public function testBuild() {
        $builder = new CategoryUpdateBuilder();
        $builder->with(new CategoryModel(['version' => 3]));

        $update = $builder->build();
        static::assertInstanceOf(CategoryUpdate::class, $update);
        static::assertSame(3, $update->getVersion());
    }
}

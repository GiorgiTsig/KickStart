<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\EncryptionKey\Controller\Adminhtml\Crypt\Key;

use Magento\Framework\App\Request\Http as HttpRequest;

/**
 * Test for Magento\EncryptionKey\Controller\Adminhtml\Crypt\Key\Save
 */
class SaveTest extends \Magento\TestFramework\TestCase\AbstractBackendController
{
    /**
     * Test save action with empty encryption key
     * @return void
     */
    public function testSaveActionWithEmptyKey():void
    {
        // data set with no random encryption key and no provided encryption key
        $ifGenerateRandom = '0';
        $encryptionKey = '';

        $request = $this->getRequest();
        $request->setMethod(HttpRequest::METHOD_POST);
        $request
            ->setPostValue('generate_random', $ifGenerateRandom)
            ->setPostValue('crypt_key', $encryptionKey);
        $this->dispatch('backend/admin/crypt_key/save');
        $this->assertSessionMessages(
            $this->containsEqual('Please enter an encryption key.'),
            \Magento\Framework\Message\MessageInterface::TYPE_ERROR
        );
    }

    /**
     * Test save action with provided encryption key
     *
     * @magentoDbIsolation enabled
     * @return void
     */
    public function testSaveActionWithProvidedKey():void
    {
        $this->markTestSkipped('Test is blocked by MAGETWO-33612.');

        // data set with provided encryption key
        $ifGenerateRandom = '0';
        $encryptionKey = 'foo_encryption_key';

        $request = $this->getRequest();
        $request
            ->setPostValue('generate_random', $ifGenerateRandom)
            ->setPostValue('crypt_key', $encryptionKey);
        $this->dispatch('backend/admin/crypt_key/save');

        $this->assertRedirect();
        $this->assertSessionMessages(
            $this->containsEqual('The encryption key has been changed.'),
            \Magento\Framework\Message\MessageInterface::TYPE_SUCCESS
        );
    }

    /**
     * Test save action with invalid encryption key
     * @return void
     */
    public function testSaveActionWithInvalidKey():void
    {
        // data set with provided encryption key
        $ifGenerateRandom = '0';
        $encryptionKey = 'invalid key';

        $params = [
            'generate_random' => $ifGenerateRandom,
            'crypt_key' => $encryptionKey,
        ];
        $this->getRequest()->setMethod(HttpRequest::METHOD_POST);
        $this->getRequest()->setPostValue($params);
        $this->dispatch('backend/admin/crypt_key/save');

        $this->assertRedirect();
        $this->assertSessionMessages(
            $this->containsEqual('Encryption key must be 32 character string without any white space.'),
            \Magento\Framework\Message\MessageInterface::TYPE_ERROR
        );
    }

    /**
     * Test save action with randomly generated key
     *
     * @magentoDbIsolation enabled
     * @return void
     */
    public function testSaveActionWithRandomKey():void
    {
        $this->markTestSkipped('Test is blocked by MAGETWO-33612.');

        // data set with random encryption key
        $ifGenerateRandom = '1';
        $encryptionKey = '';

        $request = $this->getRequest();
        $request
            ->setPostValue('generate_random', $ifGenerateRandom)
            ->setPostValue('crypt_key', $encryptionKey);
        $this->dispatch('backend/admin/crypt_key/save');

        $this->assertRedirect();
        $this->assertSessionMessages(
            $this->containsEqual('The encryption key has been changed.'),
            \Magento\Framework\Message\MessageInterface::TYPE_SUCCESS
        );
    }
}

<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = 'hyperf/hyperf-skeleton';
    public const VERSIONS          = array (
  'doctrine/annotations' => 'v1.6.1@53120e0eb10355388d6ccbe462f1fea34ddadb24',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'doctrine/lexer' => '1.0.2@1febd6c3ef84253d7c815bed85fc622ad207a9f8',
  'elasticsearch/elasticsearch' => 'v6.7.1@7be453dd36d1b141b779f2cb956715f8e04ac2f4',
  'fig/http-message-util' => '1.1.3@35b19404371b31b3a43823c755398c48c9966db4',
  'guzzlehttp/guzzle' => '6.3.3@407b0cb880ace85c9b63c5f9551db498cb2d50ba',
  'guzzlehttp/promises' => 'v1.3.1@a59da6cf61d80060647ff4d3eb2c03a2bc694646',
  'guzzlehttp/psr7' => '1.5.2@9f83dded91781a01c63574e387eaa769be769115',
  'guzzlehttp/ringphp' => '1.1.1@5e2a174052995663dd68e6b5ad838afd47dd615b',
  'guzzlehttp/streams' => '3.0.0@47aaa48e27dae43d39fc1cea0ccf0d84ac1a2ba5',
  'hyperf/amqp' => 'v1.0.1@7988580adf996fc575b1c8cbcfd32c2032aee86b',
  'hyperf/async-queue' => 'v1.0.1@dd9718c3c33cf925ee87574370d531c2135123a7',
  'hyperf/cache' => 'v1.0.1@0f501701d618f3c9c0f23cc64038b9ce2bffd8b6',
  'hyperf/command' => 'v1.0.1@89a29b478c3048048d82580ce6f8d9298ea72ab7',
  'hyperf/config' => 'v1.0.1@dd6d19114e9a100e6801dc9c14809b2099c57d3f',
  'hyperf/config-aliyun-acm' => 'v1.0.1@615f3ae8f74e1813dbfe3bc4858126018bdd7c38',
  'hyperf/constants' => 'v1.0.1@0e36dddf5820fbbe3574406b33b49f07fd63ed54',
  'hyperf/contract' => 'v1.0.1@28c9cf7fe135c94ba87d9465d0e7e132af280523',
  'hyperf/database' => 'v1.0.1@589b384dee31fae21e742f96526b784f73ebf5d7',
  'hyperf/db-connection' => 'v1.0.1@a031398336d5111c7253678745921d263ed51b9f',
  'hyperf/devtool' => 'v1.0.1@9c872b5b055a6ff3c41bd612c6589616dd67e8d3',
  'hyperf/di' => 'v1.0.1@38945d2feedd160e862c51ebd0144dfb7c2ce0e6',
  'hyperf/dispatcher' => 'v1.0.1@23c3d0a9bf81fc056c9fafafccf77d3edc8fc150',
  'hyperf/elasticsearch' => 'v1.0.1@9ed4d48682c59ff6566738b74f77ffd70b64b324',
  'hyperf/event' => 'v1.0.1@cf272bad2395daa5da5e0dbd70accf76a0316c4b',
  'hyperf/exception-handler' => 'v1.0.1@c28f9ed6f90a50ce8009b3048546ffe8787937a6',
  'hyperf/framework' => 'v1.0.1@06acea87eaef850966bfeed7151b8f6e05d20e35',
  'hyperf/guzzle' => 'v1.0.1@7f27bed9829159116acd833a92b6a4dec263fd37',
  'hyperf/http-message' => 'v1.0.1@e592c18938b5fdb9fcf611ad586dd53b3e18c6ee',
  'hyperf/http-server' => 'v1.0.1@404233b649774135a0f5e1216db14b0ef80592f8',
  'hyperf/json-rpc' => 'v1.0.1@8c0a7a02c82cec10a03906c4c4e679da27fd835a',
  'hyperf/load-balancer' => 'v1.0.1@534c2902c99bc838a319a7ac48e1e1f5d39c514c',
  'hyperf/logger' => 'v1.0.1@dd096a502631261d5ca3f649ea5d2e3928b78b93',
  'hyperf/memory' => 'v1.0.1@2a5780a1cbd3425f5cfd4298379341f33bd6c246',
  'hyperf/model-cache' => 'v1.0.1@abe3c2fc56f8eaa5876f49e2460978456e3d9fd3',
  'hyperf/paginator' => 'v1.0.1@14c1ac3d4e86aaa2d022435df004fe7cd533f56b',
  'hyperf/pool' => 'v1.0.1@8628aedd76690a30f5fff00b61a563da43838c6d',
  'hyperf/process' => 'v1.0.1@86c6a5daa1427a164e593511f9d92325269da58e',
  'hyperf/redis' => 'v1.0.1@6229e58ad84db1b070466a5f3721436d2f9e52ba',
  'hyperf/rpc' => 'v1.0.1@49b0cf4a5855613034b308ff793947d554e67f87',
  'hyperf/rpc-client' => 'v1.0.1@3b050bd8327699d4bda2d6319ecf0d6609dce697',
  'hyperf/rpc-server' => 'v1.0.1@8125ac40e0255c43e3eb5944cc1906ecca8e529c',
  'hyperf/server' => 'v1.0.1@a6d8b1a7dffce0fe921fc8f31521f5bbe22d73c4',
  'hyperf/tracer' => 'v1.0.1@3f6110de4ec1b177cedc25ae15f68885186a8306',
  'hyperf/utils' => 'v1.0.1@724cc46d3dfc0ecfc3d81aae41fa113e0c277d4c',
  'markrogoyski/math-php' => 'v0.49.0@41d56a7542233cbb0489e7982facdb1d88d8c08b',
  'monolog/monolog' => '1.24.0@bfc9ebb28f97e7a24c45bdc3f0ff482e47bb0266',
  'nesbot/carbon' => '2.19.2@adcad3f3af52d0ad4ad7b05f43aa58243b6ca67b',
  'nikic/fast-route' => 'v1.3.0@181d480e08d9476e61381e04a71b34dc0432e812',
  'nikic/php-parser' => 'v4.2.2@1bd73cc04c3843ad8d6b0bfc0956026a151fc420',
  'openzipkin/zipkin' => '1.3.2@500a27c80557d19b399354a018b3064924c1c2d6',
  'php-amqplib/php-amqplib' => 'v2.9.2@76faddcd668dabb8d4f7c00e86b8a9decd781a59',
  'php-di/phpdoc-reader' => '2.1.0@7d0de60b9341933c8afd172a6255cd7557601e0e',
  'phpoption/phpoption' => '1.5.0@94e644f7d2051a5f0fcf77d81605f152eecff0ed',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/http-message' => '1.0.1@f6561bf28d520154e4b0ec72be95418abe6d9363',
  'psr/http-server-handler' => '1.0.1@aff2f80e33b7f026ec96bb42f63242dc50ffcae7',
  'psr/http-server-middleware' => '1.0.1@2296f45510945530b9dceb8bcedb5cb84d40c5f5',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'psr/simple-cache' => '1.0.1@408d5eafb83c57f6365a3ca330ff23aa4a5fa39b',
  'ralouphie/getallheaders' => '2.0.5@5601c8a83fbba7ef674a7369456d12f1e0d0eafa',
  'react/promise' => 'v2.7.1@31ffa96f8d2ed0341a57848cbb84d88b89dd664d',
  'symfony/console' => 'v4.3.1@d50bbeeb0e17e6dd4124ea391eff235e932cbf64',
  'symfony/finder' => 'v4.3.1@b3d4f4c0e4eadfdd8b296af9ca637cfbf51d8176',
  'symfony/polyfill-ctype' => 'v1.11.0@82ebae02209c21113908c229e9883c419720738a',
  'symfony/polyfill-mbstring' => 'v1.11.0@fe5e94c604826c35a32fa832f35bd036b6799609',
  'symfony/polyfill-php73' => 'v1.11.0@d1fb4abcc0c47be136208ad9d68bf59f1ee17abd',
  'symfony/service-contracts' => 'v1.1.5@f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d',
  'symfony/translation' => 'v4.3.1@5dda505e5f65d759741dfaf4e54b36010a4b57aa',
  'symfony/translation-contracts' => 'v1.1.5@cb4b18ad7b92a26e83b65dde940fab78339e6f3c',
  'vlucas/phpdotenv' => 'v3.4.0@5084b23845c24dbff8ac6c204290c341e4776c92',
  'zendframework/zend-mime' => '2.7.1@52ae5fa9f12845cae749271034a2d594f0e4c6f2',
  'zendframework/zend-stdlib' => '3.2.1@66536006722aff9e62d1b331025089b7ec71c065',
  'composer/semver' => '1.5.0@46d9139568ccb8d9e7cdd4539cab7347568a5e2e',
  'composer/xdebug-handler' => '1.3.3@46867cbf8ca9fb8d60c506895449eb799db1184f',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.2@c5e0bc17b1620e97c968ac409acbff28b8b850be',
  'doctrine/common' => 'v2.10.0@30e33f60f64deec87df728c02b107f82cdafad9d',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/persistence' => '1.1.1@3da7c9d125591ca83944f477e65ed3d7b4617c48',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'friendsofphp/php-cs-fixer' => 'v2.15.1@20064511ab796593a3990669eff5f5b535001f7c',
  'hamcrest/hamcrest-php' => 'v2.0.0@776503d3a8e85d4f9a1148614f95b7a608b046ad',
  'hyperf/testing' => 'v1.0.1@89b16d3d67a26d0ac54772473458863063b9b3c3',
  'jean85/pretty-package-versions' => '1.2@75c7effcf3f77501d0e0caa75111aff4daa0dd48',
  'mockery/mockery' => '1.2.2@0eb0b48c3f07b3b89f5169ce005b7d05b18cf1d2',
  'myclabs/deep-copy' => '1.9.1@e6828efaba2c9b79f4499dae1d66ef8bfa7b2b72',
  'nette/bootstrap' => 'v3.0.0@e1075af05c211915e03e0c86542f3ba5433df4a3',
  'nette/di' => 'v3.0.0@19d83539245aaacb59470828919182411061841f',
  'nette/finder' => 'v2.5.0@6be1b83ea68ac558aff189d640abe242e0306fe2',
  'nette/neon' => 'v3.0.0@cbff32059cbdd8720deccf9e9eace6ee516f02eb',
  'nette/php-generator' => 'v3.2.2@acff8b136fad84b860a626d133e791f95781f9f5',
  'nette/robot-loader' => 'v3.2.0@0712a0e39ae7956d6a94c0ab6ad41aa842544b5c',
  'nette/schema' => 'v1.0.0@6241d8d4da39e825dd6cb5bfbe4242912f4d7e4d',
  'nette/utils' => 'v3.0.1@bd961f49b211997202bda1d0fbc410905be370d4',
  'ocramius/package-versions' => '1.4.0@a4d4b60d0e60da2487bd21a2c6ac089f85570dbb',
  'paragonie/random_compat' => 'v9.99.99@84b4dfb120c6f9b4ff7b3685f9b8f1aa365a0c95',
  'pdepend/pdepend' => '2.5.2@9daf26d0368d4a12bed1cacae1a9f3a6f0adf239',
  'phar-io/manifest' => '1.0.3@7761fcacf03b4d4f16e7ccb606d4879ca431fcf4',
  'phar-io/version' => '2.0.1@45a2ec53a73c70ce41d55cedef9063630abaf1b6',
  'php-cs-fixer/diff' => 'v1.3.0@78bb099e9c16361126c86ce82ec4405ebab8e756',
  'phpdocumentor/reflection-common' => '1.0.1@21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  'phpdocumentor/reflection-docblock' => '4.3.1@bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c',
  'phpdocumentor/type-resolver' => '0.4.0@9c977708995954784726e25d0cd1dddf4e65b0f7',
  'phpmd/phpmd' => '2.6.0@4e9924b2c157a3eb64395460fcf56b31badc8374',
  'phpspec/prophecy' => '1.8.1@1927e75f4ed19131ec9bcc3b002e07fb1173ee76',
  'phpstan/phpdoc-parser' => '0.3.5@8c4ef2aefd9788238897b678a985e1d5c8df6db4',
  'phpstan/phpstan' => '0.11.8@fcf0081bf3a254ddacffa03e78be87842d0c09c9',
  'phpunit/php-code-coverage' => '6.1.4@807e6013b00af69b6c5d9ceb4282d0393dbb9d8d',
  'phpunit/php-file-iterator' => '2.0.2@050bedf145a257b1ff02746c31894800e5122946',
  'phpunit/php-text-template' => '1.2.1@31f8b717e51d9a2afca6c9f046f5d69fc27c8686',
  'phpunit/php-timer' => '2.1.2@1038454804406b0b5f5f520358e78c1c2f71501e',
  'phpunit/php-token-stream' => '3.0.1@c99e3be9d3e85f60646f152f9002d46ed7770d18',
  'phpunit/phpunit' => '7.5.13@b9278591caa8630127f96c63b598712b699e671c',
  'sebastian/code-unit-reverse-lookup' => '1.0.1@4419fcdb5eabb9caa61a27c7a1db532a6b55dd18',
  'sebastian/comparator' => '3.0.2@5de4fc177adf9bce8df98d8d141a7559d7ccf6da',
  'sebastian/diff' => '3.0.2@720fcc7e9b5cf384ea68d9d930d480907a0c1a29',
  'sebastian/environment' => '4.2.2@f2a2c8e1c97c11ace607a7a667d73d47c19fe404',
  'sebastian/exporter' => '3.1.0@234199f4528de6d12aaa58b612e98f7d36adb937',
  'sebastian/global-state' => '2.0.0@e8ba02eed7bbbb9e59e43dedd3dddeff4a56b0c4',
  'sebastian/object-enumerator' => '3.0.3@7cfd9e65d11ffb5af41198476395774d4c8a84c5',
  'sebastian/object-reflector' => '1.1.1@773f97c67f28de00d397be301821b06708fca0be',
  'sebastian/recursion-context' => '3.0.0@5b0cd723502bac3b006cbf3dbf7a1e3fcefe4fa8',
  'sebastian/resource-operations' => '2.0.1@4d7a795d35b889bf80a0cc04e08d77cedfa917a9',
  'sebastian/version' => '2.0.1@99732be0ddb3361e16ad77b68ba41efc8e979019',
  'swoft/swoole-ide-helper' => 'v4.3.3@858f83953813e0f6643e221793adeabcc71f5be5',
  'symfony/config' => 'v4.3.1@6379ee07398643e09e6ed1e87d9c62dfcad7f4eb',
  'symfony/dependency-injection' => 'v4.3.1@fea7f73e278ee0337349a5a68b867fc656bb33f3',
  'symfony/event-dispatcher' => 'v4.3.1@4e6c670af81c4fb0b6c08b035530a9915d0b691f',
  'symfony/event-dispatcher-contracts' => 'v1.1.5@c61766f4440ca687de1084a5c00b08e167a2575c',
  'symfony/filesystem' => 'v4.3.1@bf2af40d738dec5e433faea7b00daa4431d0a4cf',
  'symfony/options-resolver' => 'v4.3.1@914e0edcb7cd0c9f494bc023b1d47534f4542332',
  'symfony/polyfill-php70' => 'v1.11.0@bc4858fb611bda58719124ca079baff854149c89',
  'symfony/polyfill-php72' => 'v1.11.0@ab50dcf166d5f577978419edd37aa2bb8eabce0c',
  'symfony/process' => 'v4.3.1@856d35814cf287480465bb7a6c413bb7f5f5e69c',
  'symfony/stopwatch' => 'v4.3.1@6b100e9309e8979cf1978ac1778eb155c1f7d93b',
  'theseer/tokenizer' => '1.1.3@11336f6f84e16a720dae9d8e6ed5019efa85a0f9',
  'webmozart/assert' => '1.4.0@83e253c8e0be5b0257b881e1827274667c5c17a9',
  'hyperf/hyperf-skeleton' => 'dev-master@638aa8c848603c938cdde2c2229654648114ead4',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: cannot detect its version'
        );
    }
}

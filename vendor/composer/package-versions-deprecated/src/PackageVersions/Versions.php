<?php

declare(strict_types=1);

namespace PackageVersions;

use Composer\InstalledVersions;
use OutOfBoundsException;

class_exists(InstalledVersions::class);

/**
 * This class is generated by composer/package-versions-deprecated, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 *
 * @deprecated in favor of the Composer\InstalledVersions class provided by Composer 2. Require composer-runtime-api:^2 to ensure it is present.
 */
final class Versions
{
    /**
     * @deprecated please use {@see self::rootPackageName()} instead.
     *             This constant will be removed in version 2.0.0.
     */
    const ROOT_PACKAGE_NAME = 'symfony/website-skeleton';

    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    const VERSIONS          = array (
  'composer/package-versions-deprecated' => '1.11.99.5@b4f54f74ef3453349c24a845d22392cd31e65f1d',
  'doctrine/annotations' => '1.13.2@5b668aef16090008790395c02c893b1ba13f7e08',
  'doctrine/cache' => '2.1.1@331b4d5dbaeab3827976273e9356b3b453c300ce',
  'doctrine/collections' => '1.6.8@1958a744696c6bb3bb0d28db2611dc11610e78af',
  'doctrine/common' => '3.2.1@e927fc2410c8723d053b8032e591cdff76587cdb',
  'doctrine/dbal' => '3.2.2@d1e581da590d611c8699acff9848056b2403c05b',
  'doctrine/deprecations' => 'v0.5.3@9504165960a1f83cc1480e2be1dd0a0478561314',
  'doctrine/doctrine-bundle' => '2.5.5@5c086cbbe5327937dd6f90da075f7d421b0f28bc',
  'doctrine/doctrine-migrations-bundle' => '3.2.1@c1b10bc1466e08bba82640e49c7bbcce0c9853c2',
  'doctrine/event-manager' => '1.1.1@41370af6a30faa9dc0368c4a6814d596e81aba7f',
  'doctrine/inflector' => '2.0.4@8b7ff3e4b7de6b2c84da85637b59fd2880ecaa89',
  'doctrine/instantiator' => '1.4.0@d56bf6102915de5702778fe20f2de3b2fe570b5b',
  'doctrine/lexer' => '1.2.2@9c50f840f257bbb941e6f4a0e94ccf5db5c3f76c',
  'doctrine/migrations' => '3.3.2@b6e43bb5815f4dbb88c79a0fef1c669dfba52d58',
  'doctrine/orm' => '2.10.5@1e972b6e0e3468355901a301735d859165490af2',
  'doctrine/persistence' => '2.3.0@f8af155c1e7963f3d2b4415097d55757bbaa53d8',
  'doctrine/sql-formatter' => '1.1.2@20c39c2de286a9d3262cc8ed282a4ae60e265894',
  'egulias/email-validator' => '3.1.2@ee0db30118f661fb166bcffbf5d82032df484697',
  'friendsofphp/proxy-manager-lts' => 'v1.0.5@006aa5d32f887a4db4353b13b5b5095613e0611f',
  'laminas/laminas-code' => '4.5.1@6fd96d4d913571a2cd056a27b123fa28cb90ac4e',
  'monolog/monolog' => '2.3.5@fd4380d6fc37626e2f799f29d91195040137eba9',
  'phpdocumentor/reflection-common' => '2.2.0@1d01c49d4ed62f25aa84a747ad35d5a16924662b',
  'phpdocumentor/reflection-docblock' => '5.3.0@622548b623e81ca6d78b721c5e029f4ce664f170',
  'phpdocumentor/type-resolver' => '1.6.0@93ebd0014cab80c4ea9f5e297ea48672f1b87706',
  'phpstan/phpdoc-parser' => '1.2.0@dbc093d7af60eff5cd575d2ed761b15ed40bd08e',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.1.2@513e0666f7216c7459170d56df27dfcefe1689ea',
  'psr/event-dispatcher' => '1.0.0@dbefd12671e8a14ec7f180cab83036ed26714bb0',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.4@d49695b909c3b7628b6289db5479a1c204601f11',
  'sensio/framework-extra-bundle' => 'v6.2.6@6bd976c99ef3f78e31c9490a10ba6dd8901076eb',
  'symfony/asset' => 'v5.4.3@156e45cba14f9be3fe8b987e86f482a76aa078f3',
  'symfony/cache' => 'v5.4.3@4178f0a19ec3f1f76e7f1a07b8187cbe3d94b825',
  'symfony/cache-contracts' => 'v2.5.0@ac2e168102a2e06a2624f0379bde94cd5854ced2',
  'symfony/config' => 'v5.4.3@d65e1bd990c740e31feb07d2b0927b8d4df9956f',
  'symfony/console' => 'v5.4.3@a2a86ec353d825c75856c6fd14fac416a7bdb6b8',
  'symfony/dependency-injection' => 'v5.4.3@974580fd67f14d65b045c11b09eb149cd4b13df5',
  'symfony/deprecation-contracts' => 'v2.5.0@6f981ee24cf69ee7ce9736146d1c57c2780598a8',
  'symfony/doctrine-bridge' => 'v5.4.3@f8681974e744bca8359a596cbe94096c72429307',
  'symfony/dotenv' => 'v5.4.3@84d1af2d39dd81b48eb1cd3af3f107eea7a275bb',
  'symfony/error-handler' => 'v5.4.3@c4ffc2cd919950d13c8c9ce32a70c70214c3ffc5',
  'symfony/event-dispatcher' => 'v5.4.3@dec8a9f58d20df252b9cd89f1c6c1530f747685d',
  'symfony/event-dispatcher-contracts' => 'v2.5.0@66bea3b09be61613cd3b4043a65a8ec48cfa6d2a',
  'symfony/expression-language' => 'v5.4.3@c68c6d1a308f6e2a1382bdb3a317959e1ee9aa08',
  'symfony/filesystem' => 'v5.4.3@0f0c4bf1840420f4aef3f32044a9dbb24682731b',
  'symfony/finder' => 'v5.4.3@231313534dded84c7ecaa79d14bc5da4ccb69b7d',
  'symfony/flex' => 'v1.18.3@d40a6b176b70ea323af2b08507319d1c417520fd',
  'symfony/form' => 'v5.4.3@2fa60c186cb70c940c766ca009b59949cfacd9cc',
  'symfony/framework-bundle' => 'v5.4.4@d848b8ca3d87d0fcc9d0ccbc88cf8e128db0d4c7',
  'symfony/http-client' => 'v5.4.3@a5a467b62dc91eb253db51a91a2c1977f611f60c',
  'symfony/http-client-contracts' => 'v2.5.0@ec82e57b5b714dbb69300d348bd840b345e24166',
  'symfony/http-foundation' => 'v5.4.3@ef409ff341a565a3663157d4324536746d49a0c7',
  'symfony/http-kernel' => 'v5.4.4@49f40347228c773688a0488feea0175aa7f4d268',
  'symfony/intl' => 'v5.4.3@29e326276b2455bcfa4ce02abcf7689e884acdac',
  'symfony/mailer' => 'v5.4.3@391a2ac6bf8ab298caa7b63826edc9500412ed16',
  'symfony/mime' => 'v5.4.3@e1503cfb5c9a225350f549d3bb99296f4abfb80f',
  'symfony/monolog-bridge' => 'v5.4.3@4b56e17c443e7092895477f047f2a70f324f984c',
  'symfony/monolog-bundle' => 'v3.7.1@fde12fc628162787a4e53877abadc30047fd868b',
  'symfony/notifier' => 'v5.4.3@5cfaf9164db2d5560c03fb9e1ca28d728ecd5fc8',
  'symfony/options-resolver' => 'v5.4.3@cc1147cb11af1b43f503ac18f31aa3bec213aba8',
  'symfony/orm-pack' => 'v2.2.0@c4728ba9ed071876f71df637c7dff0490c9252b2',
  'symfony/password-hasher' => 'v5.4.3@b5ed59c4536d8386cd37bb86df2b7bd5fbbd46d4',
  'symfony/polyfill-intl-grapheme' => 'v1.24.0@81b86b50cf841a64252b439e738e97f4a34e2783',
  'symfony/polyfill-intl-icu' => 'v1.24.0@c023a439b8551e320cc3c8433b198e408a623af1',
  'symfony/polyfill-intl-idn' => 'v1.24.0@749045c69efb97c70d25d7463abba812e91f3a44',
  'symfony/polyfill-intl-normalizer' => 'v1.24.0@8590a5f561694770bdcd3f9b5c69dde6945028e8',
  'symfony/polyfill-mbstring' => 'v1.24.0@0abb51d2f102e00a4eefcf46ba7fec406d245825',
  'symfony/polyfill-php73' => 'v1.24.0@cc5db0e22b3cb4111010e48785a97f670b350ca5',
  'symfony/polyfill-php80' => 'v1.24.0@57b712b08eddb97c762a8caa32c84e037892d2e9',
  'symfony/polyfill-php81' => 'v1.24.0@5de4ba2d41b15f9bd0e19b2ab9674135813ec98f',
  'symfony/process' => 'v5.4.3@553f50487389a977eb31cf6b37faae56da00f753',
  'symfony/property-access' => 'v5.4.3@4bb27fab0c8b0cabdff8cc24ed4019bfbb380e96',
  'symfony/property-info' => 'v5.4.3@bcc2b6904cbcf16b2e5d618da16117cd8e132f9a',
  'symfony/proxy-manager-bridge' => 'v5.4.3@efb82e176cd47426193ad047635ba5181dae089f',
  'symfony/routing' => 'v5.4.3@44b29c7a94e867ccde1da604792f11a469958981',
  'symfony/runtime' => 'v5.4.3@354ce8493868594339cafe17ef67aba874c12158',
  'symfony/security-bundle' => 'v5.4.3@d3239128269ae67d78df535f65f41cf02cabdc6c',
  'symfony/security-core' => 'v5.4.3@b26a44457a4d1a60c79f1c23273e812c4077ce85',
  'symfony/security-csrf' => 'v5.4.3@57c1c252ca756289c2b61327e08fb10be3936956',
  'symfony/security-guard' => 'v5.4.3@3d68d9f8e162f6655eb0a0237b9f333a82a19da9',
  'symfony/security-http' => 'v5.4.3@536aadbdb6c6a3f13000aa445919a1f052ae2630',
  'symfony/serializer' => 'v5.4.3@13961b5b54691cbbca9c47f7d1a5b5c8f07dae6e',
  'symfony/serializer-pack' => 'v1.1.0@d6b1aca1e4f853d0d1ad3da24576e4dd9ab22510',
  'symfony/service-contracts' => 'v2.5.0@1ab11b933cd6bc5464b08e81e2c5b07dec58b0fc',
  'symfony/stopwatch' => 'v5.4.3@395220730edceb6bd745236ccb5c9125c748f779',
  'symfony/string' => 'v5.4.3@92043b7d8383e48104e411bc9434b260dbeb5a10',
  'symfony/translation' => 'v5.4.3@a9dd7403232c61e87e27fb306bbcd1627f245d70',
  'symfony/translation-contracts' => 'v2.5.0@d28150f0f44ce854e942b671fc2620a98aae1b1e',
  'symfony/twig-bridge' => 'v5.4.3@925719b20832e3dabd399fd9ebf85ed0eabf9999',
  'symfony/twig-bundle' => 'v5.4.3@45ae3ee8155f93042a1033b166a7a3ed57b96a92',
  'symfony/twig-pack' => 'v1.0.1@08a73e833e07921c464336deb7630f93e85ef930',
  'symfony/validator' => 'v5.4.3@b420894e98f414b9ad5d4494650bf281f6dd6028',
  'symfony/var-dumper' => 'v5.4.3@970a01f208bf895c5f327ba40b72288da43adec4',
  'symfony/var-exporter' => 'v5.4.3@b199936b7365be36663532e547812d3abb10234a',
  'symfony/web-link' => 'v5.4.3@8b9b073390359549fec5f5d797f23bbe9e2997a5',
  'symfony/yaml' => 'v5.4.3@e80f87d2c9495966768310fc531b487ce64237a2',
  'twig/extra-bundle' => 'v3.3.7@e0cc9c35a0650006b0da232a3f749cc060c65d3b',
  'twig/twig' => 'v3.3.7@8f168c6ffa3ce76d1786b3cd52275424a3fc675b',
  'webmozart/assert' => '1.10.0@6964c76c7804814a842473e0c8fd15bab0f18e25',
  'myclabs/deep-copy' => '1.10.2@776f831124e9c62e1a2c601ecc52e776d8bb7220',
  'nikic/php-parser' => 'v4.13.2@210577fe3cf7badcc5814d99455df46564f3c077',
  'phar-io/manifest' => '2.0.3@97803eca37d319dfa7826cc2437fc020857acb53',
  'phar-io/version' => '3.1.0@bae7c545bef187884426f042434e561ab1ddb182',
  'phpspec/prophecy' => 'v1.15.0@bbcd7380b0ebf3961ee21409db7b38bc31d69a13',
  'phpunit/php-code-coverage' => '9.2.10@d5850aaf931743067f4bfc1ae4cbd06468400687',
  'phpunit/php-file-iterator' => '3.0.6@cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
  'phpunit/php-invoker' => '3.1.1@5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
  'phpunit/php-text-template' => '2.0.4@5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
  'phpunit/php-timer' => '5.0.3@5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
  'phpunit/phpunit' => '9.5.13@597cb647654ede35e43b137926dfdfef0fb11743',
  'sebastian/cli-parser' => '1.0.1@442e7c7e687e42adc03470c7b668bc4b2402c0b2',
  'sebastian/code-unit' => '1.0.8@1fc9f64c0927627ef78ba436c9b17d967e68e120',
  'sebastian/code-unit-reverse-lookup' => '2.0.3@ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
  'sebastian/comparator' => '4.0.6@55f4261989e546dc112258c7a75935a81a7ce382',
  'sebastian/complexity' => '2.0.2@739b35e53379900cc9ac327b2147867b8b6efd88',
  'sebastian/diff' => '4.0.4@3461e3fccc7cfdfc2720be910d3bd73c69be590d',
  'sebastian/environment' => '5.1.3@388b6ced16caa751030f6a69e588299fa09200ac',
  'sebastian/exporter' => '4.0.4@65e8b7db476c5dd267e65eea9cab77584d3cfff9',
  'sebastian/global-state' => '5.0.3@23bd5951f7ff26f12d4e3242864df3e08dec4e49',
  'sebastian/lines-of-code' => '1.0.3@c1c2e997aa3146983ed888ad08b15470a2e22ecc',
  'sebastian/object-enumerator' => '4.0.4@5c9eeac41b290a3712d88851518825ad78f45c71',
  'sebastian/object-reflector' => '2.0.4@b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
  'sebastian/recursion-context' => '4.0.4@cd9d8cf3c5804de4341c283ed787f099f5506172',
  'sebastian/resource-operations' => '3.0.3@0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
  'sebastian/type' => '2.3.4@b8cd8a1c753c90bc1a0f5372170e3e489136f914',
  'sebastian/version' => '3.0.2@c6c1022351a901512170118436c764e473f6de8c',
  'symfony/browser-kit' => 'v5.4.3@18e73179c6a33d520de1b644941eba108dd811ad',
  'symfony/css-selector' => 'v5.4.3@b0a190285cd95cb019237851205b8140ef6e368e',
  'symfony/debug-bundle' => 'v5.4.3@6f508169752ed2c0d0d8a6641c4cca39a8f1dfcb',
  'symfony/debug-pack' => 'v1.0.10@98ef3cb02f9adb54b98d8bc95c84b896513a51d5',
  'symfony/dom-crawler' => 'v5.4.3@2634381fdf27a2a0a8ac8eb404025eb656c65d0c',
  'symfony/maker-bundle' => 'v1.36.4@716eee9c8b10b33e682df1b7d80b9061887e9691',
  'symfony/phpunit-bridge' => 'v6.0.3@81f5e8e453433e0182a49ca45d4734cb3a2f818f',
  'symfony/profiler-pack' => 'v1.0.6@bcd6e80af9819454ac18594362e7875fd1d771c7',
  'symfony/test-pack' => 'v1.0.9@66a2b0a5c9152128b42feb439a735130a9b4d3dc',
  'symfony/web-profiler-bundle' => 'v5.4.3@296fc6ccf3ea706889dcf33f02eb20dcf953612d',
  'theseer/tokenizer' => '1.2.1@34a41e998c2183e22995f158c581e7b5e755ab9e',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php72' => '*@',
  'symfony/website-skeleton' => 'v5.4.99@',
);

    private function __construct()
    {
    }

    /**
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function rootPackageName() : string
    {
        if (!self::composer2ApiUsable()) {
            return self::ROOT_PACKAGE_NAME;
        }

        return InstalledVersions::getRootPackage()['name'];
    }

    /**
     * @throws OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     * @psalm-pure
     *
     * @psalm-suppress ImpureMethodCall we know that {@see InstalledVersions} interaction does not
     *                                  cause any side effects here.
     */
    public static function getVersion(string $packageName): string
    {
        if (self::composer2ApiUsable()) {
            return InstalledVersions::getPrettyVersion($packageName)
                . '@' . InstalledVersions::getReference($packageName);
        }

        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }

    private static function composer2ApiUsable(): bool
    {
        if (!class_exists(InstalledVersions::class, false)) {
            return false;
        }

        if (method_exists(InstalledVersions::class, 'getAllRawData')) {
            $rawData = InstalledVersions::getAllRawData();
            if (count($rawData) === 1 && count($rawData[0]) === 0) {
                return false;
            }
        } else {
            $rawData = InstalledVersions::getRawData();
            if ($rawData === null || $rawData === []) {
                return false;
            }
        }

        return true;
    }
}

<?php namespace KrisanAlfa\Theme;

class SleekTheme extends BladeTheme
{
    public function __construct($config)
    {
        parent::__construct($config);

        $directory = explode(DIRECTORY_SEPARATOR.'src', __DIR__);
        $directory = reset($directory);

        $this->addBaseDirectory($directory, 4);

        $this->resolveAssetPath('vendor'.DIRECTORY_SEPARATOR.'blade-foundation');
    }
}

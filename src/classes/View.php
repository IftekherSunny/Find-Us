<?php

namespace FindUs;

class View
{
    /**
     * Debug mode.
     *
     * @var bool
     */
    protected $debug;

    /**
     * Views directory path.
     *
     * @var string
     */
    protected $view;

    /**
     * Compiled views directory path.
     *
     * @var string
     */
    protected $compile;

    /**
     * create a new view instance.
     *
     * @param string $view
     * @param string $compile
     * @param bool   $debug
     */
    public function __construct($view, $compile, $debug = false)
    {
        $this->view = $view;

        $this->compile = $compile;

        $this->debug = $debug;
    }

    /**
     * Get generated html output for the given view.
     *
     * @param string $view
     * @param array $data
     *
     * @return string
     */
    public function render($view, $data = [])
    {
        $viewFile = $this->getViewPath($view);

        $compiledViewPath = $this->getCompiledViewPath($viewFile);

        $this->compileView($compiledViewPath, $viewFile);

        return $this->generateOutput($compiledViewPath, $data);
    }

    /**
     * Get view file path.
     *
     * @param string $view
     *
     * @return string
     */
    protected function getViewPath($view)
    {
        $viewFile = $this->view . '/' . $view;

        return $viewFile;
    }

    /**
     * Get compiled view file path.
     *
     * @param string $viewFile
     *
     * @return string
     */
    protected function getCompiledViewPath($viewFile)
    {
        $compiledViewPath = $this->compile . '/' . md5($viewFile);

        return $compiledViewPath;
    }

    /**
     * Compile given view file if debug mode enable or
     * compiled view for the given view file does not exist.
     *
     * @param string $compiledViewPath
     * @param string $viewFile
     */
    protected function compileView($compiledViewPath, $viewFile)
    {
        if ($this->debug || !file_exists($compiledViewPath)) {
            $view = file_get_contents($viewFile);

            $view = str_replace([ "{{", "}}" ], [ "<?php echo ", "?>" ], $view);

            file_put_contents($compiledViewPath, $view);
        }
    }

    /**
     * Generate html output for the given compiled view file.
     *
     * @param string $compiledViewPath
     * @param array  $data
     *
     * @return string
     */
    protected function generateOutput($compiledViewPath, $data)
    {
        ob_start();

        extract($data);

        include $compiledViewPath;

        return ob_get_clean();
    }
}
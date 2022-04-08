<?php

namespace ContainerLRG5DFS;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_Runtime_MarkdownService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.runtime.markdown' shared service.
     *
     * @return \Twig\Extra\Markdown\MarkdownRuntime
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'markdown-extra'.\DIRECTORY_SEPARATOR.'MarkdownRuntime.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'markdown-extra'.\DIRECTORY_SEPARATOR.'MarkdownInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'markdown-extra'.\DIRECTORY_SEPARATOR.'LeagueMarkdown.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'commonmark'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'ConverterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'commonmark'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MarkdownConverterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'commonmark'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MarkdownConverter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'league'.\DIRECTORY_SEPARATOR.'commonmark'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CommonMarkConverter.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'.\DIRECTORY_SEPARATOR.'LeagueCommonMarkConverterFactory.php';

        return $container->privates['twig.runtime.markdown'] = new \Twig\Extra\Markdown\MarkdownRuntime(new \Twig\Extra\Markdown\LeagueMarkdown((new \Twig\Extra\TwigExtraBundle\LeagueCommonMarkConverterFactory(new RewindableGenerator(function () use ($container) {
            return new \EmptyIterator();
        }, 0)))->__invoke()));
    }
}

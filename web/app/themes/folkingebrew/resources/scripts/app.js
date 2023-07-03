import domReady from '@roots/sage/client/dom-ready';
import {header} from './header.js'

/**
 * Application entrypoint
 */
domReady(async () => {
  header();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);



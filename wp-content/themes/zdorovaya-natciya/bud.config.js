/**
 * @typedef {import('@roots/bud').Bud} bud
 *
 * @param {bud} app
 */
module.exports = async (app) => {
  app
    /**
     * Application entrypoints
     *
     * Paths are relative to your resources directory
     */
    .entry({
      app: ['@scripts/app', '@styles/app'],
      editor: ['@scripts/editor', '@styles/editor'],
    })



    /**
     * These files should be processed as part of the build
     * even if they are not explicitly imported in application assets.
     */
    .assets('images')

    /**
     * These files will trigger a full page reload
     * when modified.
     */
    .watch([
      'resources/views/**/*.blade.php',
      'app/View/**/*.php',
      'front/markup/components/**/*.js',
      'front/markup/static/**/*.js',
      // 'front/markup/components/**/*.scss',
      // 'front/markup/static/**/*.scss',
      'front/dev/static/css/main.css',
    ])

    /**
     * Target URL to be proxied by the dev server.
     *
     * This should be the URL you use to visit your local development server.
     */
    .proxy('http://zdorovaya-natciya.loc')

    /**
     * Development URL to be used in the browser.
     */
    .serve('http://localhost:3008');
};

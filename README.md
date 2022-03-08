# UCLA Physical Sciences Block Types
Custom plugin to disable unsupported WordPress blocks. 

## How to use

In `ucla-ps-block-types.js` unregister block slugs to disable them from the editor. 

### Example

If block slug is `core/columns` then add unregisterBlockType

```
wp.blocks.unregisterBlockType( 'core/columns' );
wp.blocks.unregisterBlockType( 'core/latest-comments' );
```

To find out name of a block slug, view source and get name from data-type element.

## Links

- [WordPress Blocks](https://wordpress.org/support/article/blocks/)
- [Code Reference: enqueue_block_editor_assets](https://developer.wordpress.org/reference/hooks/enqueue_block_editor_assets/)

## Hooks

Two hooks introduced to WordPress specifically for enqueueing block assets.

- `enqueue_block_editor_assets` – This can be used to enqueue block scripts and styles in the admin editor only.
- `enqueue_block_assets` – This is used to enqueue block scripts and styles in both the admin editor and frontend of the site.

For more info, view [2018 blog post by Jason YingLing](https://jasonyingling.me/enqueueing-scripts-and-styles-for-gutenberg-blocks/)

## Contributors

- [Scott Gruber](https://github.com/scottgruber)
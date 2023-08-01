<picture>
  <source srcset="<?= get_template_directory_uri() . $args["sp"] ?>" media="(max-width: 768px)" />
  <img src="<?= get_template_directory_uri() . $args["pc"] ?>" alt="<?= $args["alt"] ?>" />
</picture>
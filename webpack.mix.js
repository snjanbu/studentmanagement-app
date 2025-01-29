const mix = require("laravel-mix");

mix.scripts("resources/js/*.js", "public/js/app.js").scripts(
    "resources/css/*.css",
    "public/css/app.css"
);

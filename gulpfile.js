const elixer = require('laravel-elixir');

elixer(function(mix) {
    mix.sass(["_variables.scss", "app.scss", "black.scss", "mywall.scss"])
        .scripts([""]);
});
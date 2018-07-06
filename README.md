Deprecation notice: This repo is no longer maintained.

## MoonWalkPHP

Removes trailing indentation in HEREDOC strings and other strings with multiple lines.

### Usage

Without moonwalk:

```php
function hello() {
  $y = 0;
  if(true) {
  $x = <<<EOT
<div>
  <span>OK</span>
  <div>
    <div></div>
  </div>
</div>
EOT;
}
```

With moonwalk:

```php
include "moon-walk.php"
function hello() {
  $y = 0;
  if(true) {
  $x = <<<EOT
    <div>
      <span>OK</span>
      <div>
        <div></div>
      </div>
    </div>
EOT;
  $x = moonWalk($x);
}
```

// Masonry Layout for archive pages

console.log("masonry.js");

let magicGrid = new MagicGrid({
  container: ".archive-grid",
  static: false,
  items: 10,
  animate: true,
  gutter: 40,
  useTransform: true,
});

magicGrid.listen();

magicGrid.positionItems();

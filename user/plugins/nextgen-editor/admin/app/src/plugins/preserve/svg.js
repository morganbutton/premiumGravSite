export default {};

export const svgShapes = [
  'path',
  'circle',
  'rect',
  'line',
  'polygon',
  'polyline',
];

export const svgTags = svgShapes.concat([
  'svg',
  'g',
]);

window.nextgenEditor.addVariable('preserveInlineTags', svgTags);

// Approach 1:

// Select the child element of the parent element.
// Select the parent by .parentNode property.
// Use Array.prototype.indexOf.call(Children_of_parent, current_child) to get the index.

Array.prototype.indexOf.call(parent.children, child);
const fs = require("fs");

const capitalize = s => {
  if (typeof s !== "string") return "";
  return s.charAt(0).toUpperCase() + s.slice(1);
};

async function createFile(path, content, className) {
  try {
    if (
      (await fs.existsSync(`${path}/${capitalize(className)}.php`)) === false
    ) {
      const data = fs.writeFileSync(
        `${path}/${capitalize(className)}.php`,
        content
      );
      //file written successfully
    } else {
      console.error(
        `Err: ${path}/${capitalize(className)}.php file already exists`
      );
    }
  } catch (err) {
    console.error(`Err: ${err}`);
  }
}

module.exports = {
  createFile: createFile,
  capitalize: capitalize
};

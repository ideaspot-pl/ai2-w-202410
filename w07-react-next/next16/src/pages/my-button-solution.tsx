import {ReactElement, useState} from "react";

export default function MyButtonPageSolution() {
  const [globalCounter, setGlobalCounter] = useState(0);

  return (
    <main>
      <MyButton globalCounter={globalCounter} setGlobalCounter={setGlobalCounter} />
      <MyButton globalCounter={globalCounter} setGlobalCounter={setGlobalCounter} />
      <MyButton globalCounter={globalCounter} setGlobalCounter={setGlobalCounter} />

      <div>Global counter: {globalCounter}</div>
    </main>
  );
}

export function MyButton({globalCounter, setGlobalCounter}: {
  globalCounter: number,
  setGlobalCounter: (counter: number) => void
}): ReactElement {
  const [counter, setCounter] = useState(0);

  const handleClick = () => {
    setCounter(counter+1);
    setGlobalCounter(globalCounter+1);
  }

  return (
    <div>
      <button
          className={"text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"}
        // onClick={() => setCounter(counter+1)}
        onClick={handleClick}
      >
        Click me!
      </button>
      <div>Clicked {counter} times!</div>
    </div>
  );
}

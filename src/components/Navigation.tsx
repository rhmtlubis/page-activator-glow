
import React, { useEffect, useRef, useState } from 'react';
import { motion } from 'framer-motion';

interface NavigationProps {
  activePageId: string;
  onPageChange: (pageId: string) => void;
  pages: { id: string; label: string }[];
}

const Navigation: React.FC<NavigationProps> = ({ activePageId, onPageChange, pages }) => {
  const [indicatorStyle, setIndicatorStyle] = useState({ left: 0, width: 0 });
  const navRefs = useRef<(HTMLLIElement | null)[]>([]);

  useEffect(() => {
    // Update indicator position when active page changes
    const activeIndex = pages.findIndex(page => page.id === activePageId);
    if (activeIndex !== -1 && navRefs.current[activeIndex]) {
      const activeItem = navRefs.current[activeIndex];
      if (activeItem) {
        setIndicatorStyle({
          left: activeItem.offsetLeft,
          width: activeItem.offsetWidth,
        });
      }
    }
  }, [activePageId, pages]);

  return (
    <nav className="relative z-10">
      <ul className="flex space-x-10 justify-center items-center">
        {pages.map((page, index) => (
          <li
            key={page.id}
            ref={el => (navRefs.current[index] = el)}
            className={`nav-item cursor-pointer text-sm tracking-wider transition-all duration-300 ease-in-out px-1 py-2 ${
              activePageId === page.id ? 'active text-blue-500 font-medium' : 'text-gray-600 hover:text-blue-400'
            }`}
            onClick={() => onPageChange(page.id)}
          >
            {page.label}
          </li>
        ))}
        <motion.div
          className="page-indicator bg-blue-500"
          initial={false}
          animate={{
            left: indicatorStyle.left,
            width: indicatorStyle.width,
          }}
          transition={{ type: 'spring', stiffness: 300, damping: 30 }}
        />
      </ul>
    </nav>
  );
};

export default Navigation;

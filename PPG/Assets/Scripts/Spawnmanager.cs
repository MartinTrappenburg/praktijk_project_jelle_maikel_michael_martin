using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Spawnmanager : MonoBehaviour
{
    public GameObject[] carPrefabs;
    public float spawnHeight = 0.3f;
    public Vector3 spawnSite1;
    public Vector3 spawnSite2;
    public Vector3 spawnSite3;
    public Vector3 spawnSite4;
    public Vector3 spawnSite5;
    public Vector3 spawnSite6;
    public Vector3 spawnSite7;
    
    public List<Vector3> spawnGrid = new List<Vector3>();
    // Start is called before the first frame update
    void Start()
    {
        spawnSite1 = new Vector3(244.5f, spawnHeight, 203.5f);
        spawnSite2 = new Vector3(236, spawnHeight, 200);
        spawnSite3 = new Vector3(242.7f, spawnHeight, 194);
        spawnSite4 = new Vector3(234.5f, spawnHeight, 191);
        spawnSite5 = new Vector3(241, spawnHeight, 185f);
        spawnSite6 = new Vector3(232.75f, spawnHeight, 181.7f);
        spawnSite7 = new Vector3(239.5f, spawnHeight, 175.4f);
        spawnGrid.Add(spawnSite1);
        spawnGrid.Add(spawnSite2);
        spawnGrid.Add(spawnSite3);
        spawnGrid.Add(spawnSite4);
        spawnGrid.Add(spawnSite5);
        spawnGrid.Add(spawnSite6);
    	
        /*for (int i = 0; i <= 5; i++)
        {
            int currentPos = spawnGrid.Count - 1;
            Random.Range(spawnGrid[0], spawnGrid[currentPos]);
            
            spawnGrid.Remove(spawnGrid[currentPos]);
        }*/
    }



    // Update is called once per frame
    void Update()
    {
        
    }
}
